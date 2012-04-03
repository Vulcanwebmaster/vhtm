using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;
using Emgu.CV;
using Emgu.CV.Structure;
using Emgu.CV.CvEnum;
using System.IO;
using System.Data;
using System.Linq;
using System.Data.SqlClient;


namespace FaceRecognition
{
    public partial class FrmPrincipal : Form
    {
        Timer timer1 = new Timer();        

        Image<Bgr, Byte> currentFrame;
        Capture grabber;
        HaarCascade face;
        HaarCascade eye;
        MCvFont font = new MCvFont(FONT.CV_FONT_HERSHEY_TRIPLEX, 0.5d, 0.5d);
        Image<Gray, byte> result, TrainedFace = null;
        Image<Gray, byte> gray = null;
        List<Image<Gray, byte>> trainingImages = new List<Image<Gray, byte>>();
        List<string> labels= new List<string>();
        List<string> NamePersons = new List<string>();
        int ContTrain, NumLabels, t;
        string name, names = null;
        

        public FrmPrincipal()
        {
            InitializeComponent();
            
            face = new HaarCascade("frontalface.xml");
            eye = new HaarCascade("eye.xml");
            try
            {
                
                string Labelsinfo = File.ReadAllText(Application.StartupPath + "/TrainedFaces/TrainedLabels.txt");
                string[] Labels = Labelsinfo.Split('%');
                NumLabels = Convert.ToInt16(Labels[0]);
                ContTrain = NumLabels;
                string LoadFaces;

                for (int tf = 1; tf < NumLabels+1; tf++)
                {
                    LoadFaces = "face" + tf + ".bmp";
                    trainingImages.Add(new Image<Gray, byte>(Application.StartupPath + "/TrainedFaces/" + LoadFaces));
                    labels.Add(Labels[tf]);
                }
            
            }
            catch(Exception e)
            {
                //MessageBox.Show("Nothing in binary database, please add at least a face", "Trained faces load", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
            }

        }


        private void button1_Click(object sender, EventArgs e)
        {
            
            grabber = new Capture();
            grabber.QueryFrame();
            
            Application.Idle += new EventHandler(FrameGrabber);            
        }


        int count_people()
        {
            
            Database.DataClasses1DataContext db = new Database.DataClasses1DataContext();
            return (db.PERSONs.Count());
        }

        private void button2_Click(object sender, System.EventArgs e)
        {
            int enum1 = count_people();            
            {
            timer1.Stop();

            Boolean ok = false;
            Login frm = new Login();
            frm.ShowDialog();
            
            int enum2 = count_people();
            if (enum2 > enum1)
            {
                //MessageBox.Show("enum1 = "+enum1.ToString()+ "enum2 = "+enum2.ToString());
                try
                {

                    ContTrain = ContTrain + 1;

                    gray = grabber.QueryGrayFrame().Resize(320, 240, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);

                    MCvAvgComp[][] facesDetected = gray.DetectHaarCascade(
                    face,
                    1.2,
                    10,
                    Emgu.CV.CvEnum.HAAR_DETECTION_TYPE.DO_CANNY_PRUNING,
                    new Size(20, 20));

                    //Action for each element detected
                    foreach (MCvAvgComp f in facesDetected[0])
                    {
                        TrainedFace = currentFrame.Copy(f.rect).Convert<Gray, byte>();
                        break;
                    }

                    TrainedFace = result.Resize(100, 100, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);
                    trainingImages.Add(TrainedFace);
                    labels.Add(textBox1.Text);

                    imageBox1.Image = TrainedFace;

                    File.WriteAllText(Application.StartupPath + "/TrainedFaces/TrainedLabels.txt", trainingImages.ToArray().Length.ToString() + "%");

                    for (int i = 1; i < trainingImages.ToArray().Length + 1; i++)
                    {
                        trainingImages.ToArray()[i - 1].Save(Application.StartupPath + "/TrainedFaces/face" + i + ".bmp");
                        File.AppendAllText(Application.StartupPath + "/TrainedFaces/TrainedLabels.txt", labels.ToArray()[i - 1] + "%");
                    }

                    label6.Text = textBox1.Text + "´s face detected and added :). Training OK";
                    //MessageBox.Show(textBox1.Text + "´s face detected and added :)", "Training OK", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
                catch
                {
                    MessageBox.Show("Enable the face detection first", "Training Fail", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
                }
            }
            }
        }


        void FrameGrabber(object sender, EventArgs e)
        {
            int enum1 = count_people();
            if (enum1 == 0) show(0);
            
                label3.Text = "0";
                NamePersons.Add("");
                currentFrame = grabber.QueryFrame().Resize(320, 240, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);
                gray = currentFrame.Convert<Gray, Byte>();
                MCvAvgComp[][] facesDetected = gray.DetectHaarCascade(
              face,
              1.2,
              10,
              Emgu.CV.CvEnum.HAAR_DETECTION_TYPE.DO_CANNY_PRUNING,
              new Size(20, 20));


                foreach (MCvAvgComp f in facesDetected[0])
                {
                    t = t + 1;
                    result = currentFrame.Copy(f.rect).Convert<Gray, byte>().Resize(100, 100, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);

                    currentFrame.Draw(f.rect, new Bgr(Color.Red), 2);


                    if (trainingImages.ToArray().Length != 0)
                    {

                        MCvTermCriteria termCrit = new MCvTermCriteria(ContTrain, 0.001);

                        EigenObjectRecognizer recognizer = new EigenObjectRecognizer(
                           trainingImages.ToArray(),
                           labels.ToArray(),
                           3000,
                           ref termCrit);

                        int index = 0;

                        name = recognizer.Recognize(result, ref index);

                        name = label8.Text;
                        //Draw the label for each face detected and recognized
                        currentFrame.Draw(name, ref font, new Point(f.rect.X - 2, f.rect.Y - 2), new Bgr(Color.LightGreen));

                        show(index);
                        //MessageBox.Show(index.ToString());
                        label6.Text = index.ToString();

                    }

                    NamePersons[t - 1] = name;
                    NamePersons.Add("");


                    //Set the number of faces detected on the scene
                    label3.Text = facesDetected[0].Length.ToString();
                }
                t = 0;


                for (int nnn = 0; nnn < facesDetected[0].Length; nnn++)
                {
                    names = names + NamePersons[nnn] + ", ";
                }

                imageBoxFrameGrabber.Image = currentFrame;
                label4.Text = names;
                names = "";

                NamePersons.Clear();
            
        }

        void timer1_Tick(object sender, EventArgs e)
        {
            try
            {
                
                player.URL = "alarm.wav";
                pictureBox1.Visible = true;               
                ContTrain = ContTrain + 1;
                gray = grabber.QueryGrayFrame().Resize(320, 240, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);

                
                MCvAvgComp[][] facesDetected = gray.DetectHaarCascade(
                face,
                1.2,
                10,
                Emgu.CV.CvEnum.HAAR_DETECTION_TYPE.DO_CANNY_PRUNING,
                new Size(20, 20));

                
                foreach (MCvAvgComp f in facesDetected[0])
                {
                    TrainedFace = currentFrame.Copy(f.rect).Convert<Gray, byte>();
                    break;
                }

                
                TrainedFace = result.Resize(100, 100, Emgu.CV.CvEnum.INTER.CV_INTER_CUBIC);
                trainingImages.Add(TrainedFace);
                labels.Add(textBox1.Text);

                imageBox1.Image = TrainedFace;

                
                File.WriteAllText(Application.StartupPath + "/Blacklist/TrainedLabels.txt", trainingImages.ToArray().Length.ToString() + "%");

                
                for (int i = 1; i < trainingImages.ToArray().Length + 1; i++)
                {
                    trainingImages.ToArray()[i - 1].Save(Application.StartupPath + "/Blacklist/face" + i + ".bmp");
                    //File.AppendAllText(Application.StartupPath + "/TrainedFaces/TrainedLabels.txt", labels.ToArray()[i - 1] + "%");
                }

                label6.Text = textBox1.Text + "´s face detected and added :). Training OK";
                //MessageBox.Show(textBox1.Text + "´s face detected and added :)", "Training OK", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            catch
            {
                MessageBox.Show("Enable the face detection first", "Training Fail", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
            }
        }

        void show(int index)
        {           
            try
            {
                //MessageBox.Show("index = "+index.ToString());
                if (index == 0)
                {
                    label8.ForeColor = Color.Red;
                    Position.ForeColor = Color.Red;

                    label8.Text = "Stranger";
                    Position.Text = "...";
                    time.Text = System.DateTime.Now.ToString();

                    if (timer1.Enabled == false)
                    {                        
                        timer1.Enabled = true;
                        timer1.Interval = 5000;

                        timer1.Tick += new EventHandler(timer1_Tick);

                        timer1.Start();
                    }
                }
                else
                {
                    timer1.Enabled = false;
                    timer1.Stop();                    

                    Database.DataClasses1DataContext db = new Database.DataClasses1DataContext();
                    Database.PERSON per = db.PERSONs.Single(p => p.Picture == index.ToString());
                    IEnumerable<Database.POSITION> ds = from el in db.POSITIONs
                                                        where el.ID_Position == per.ID_Position
                                                        select el;
                    if (ds.Count() > 0)
                    {
                        label8.ForeColor = Color.Green;
                        Position.ForeColor = Color.Green;

                        label8.Text = per.Name;
                        Database.POSITION pos=db.POSITIONs.Single(p=>p.ID_Position==per.ID_Position);
                        Position.Text = pos.Name;
                        time.Text = System.DateTime.Now.ToString();
                    }
                    
                }
            }
            catch (Exception)
            { }
        }

        private void FrmPrincipal_Load(object sender, EventArgs e)
        {
            timer1.Enabled = false;  
            button1_Click(sender, e);
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            if (pictureBox1.Visible == true)
            {
                player.URL = "";
                pictureBox1.Visible = false;

                label8.Text = "...";
                Position.Text = "...";
            }                
        }
    }
}
