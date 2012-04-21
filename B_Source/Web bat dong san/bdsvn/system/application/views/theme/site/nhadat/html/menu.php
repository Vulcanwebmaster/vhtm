<div class="menu">
    <ul>
        <li <?if($this->uri->segment(1)==''){echo ' class="current"';}?>>
            <a href="<?=base_url()?>">
                <b>Trang chủ</b>
            </a>
        </li>
        <li <?if($this->uri->segment(1)=='tintuc'){echo ' class="current"';}?>>
            <a href="<?=base_url()?>tintuc">
                <b>Thông tin - Tiện ích</b>
            </a>
        </li>        

        <li <?if($this->uri->segment(1)=='bds' && $this->uri->segment(2)==2){echo ' class="current"';}?>>
            <a href="<?=base_url()?>bds/2/nha.html">
                <b>Nhà</b>
            </a>
        </li> 
        <li <?if($this->uri->segment(1)=='bds' && $this->uri->segment(2)==3){echo ' class="current"';}?>>
            <a href="<?=base_url()?>bds/3/dat.html">
                <b>Đất</b>
            </a>
        </li> 
        <li <?if($this->uri->segment(1)=='bds' && $this->uri->segment(2)==1){echo ' class="current"';}?>>
            <a href="<?=base_url()?>bds/1/chung-cu-can-ho.html">
                <b>Chung cư, Căn hộ</b>
            </a>
        </li>
        <li <?if($this->uri->segment(1)=='dangtin' && $this->uri->segment(2)==1){echo ' class="current"';}?>>
            <a href="<?=base_url()?>dangtin/1">
                <b>Đăng tin Nhà - Đất</b>
            </a>
        </li>  
        <li <?if($this->uri->segment(1)=='lienhe'){echo ' class="current"';}?>>
            <a href="<?=base_url()?>lienhe">
                <b>Liên hệ</b>
            </a>
        </li>                                     
    </ul>
</div>
