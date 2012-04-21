<!-- Author: tienlx -->
<?php echo form_open('hoidap');?>
    <div id="ask-advice">       
        <h1 class="hq1">
            Hãy gửi câu hỏi để chúng tôi trả lời giúp bạn.</h1>
        <div class="hq2">

        </div>
        <fieldset id="basic-infor">
            <div style="width: 50%; float: left">
                <h2>
                    Tên liên hệ&nbsp;(<span style="color: Red">*</span>)</h2>
                <input class="required" id="name" type="text" name="name" value=<?php set_value('name');?>></div>
            <div style="width: 50%; float: right">
                <h2>
                    Email&nbsp;(<span style="color: Red">*</span>)</h2>
                <input id="email" type="text" name="email" class="required email" value=<?php set_value('email');?>></div>
        </fieldset>
        <fieldset id="ask-detail" class="ask">
            <h2>
                Chi tiết câu hỏi
                <span style="font-weight: normal;">(Yêu cầu gõ tiếng Việt có dấu):</span>
            </h2>
            <textarea cols="80" class="mceEditor" id="commentDetail" name="commentDetail" rows="10" ><?php 
            if (isset($_POST["questionTitle"]))
            	echo $_POST["questionTitle"];
            ?><?php set_value('commentDetail');?></textarea>

        	</fieldset>
				<fieldset class="ask-button">
					<input type="submit" value='Gửi' />
					<input type="button" id="questionCancel" name="questionCancel" value='Hủy' />
        		</fieldset>
</div>
 <?=form_close()?>