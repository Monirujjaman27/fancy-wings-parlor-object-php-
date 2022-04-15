<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class defaultSettings
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function updateDefaults($data, $file)
    {
        $title   = $this->fm->validation($data['title']);
        $address   = $this->fm->validation($data['address']);
        $about    = $this->fm->validation($data['about']);
        $phone = $this->fm->validation($data['phone']);
        $email    = $this->fm->validation($data['email']);
        $google   = $this->fm->validation($data['google']);
        $fb    = $this->fm->validation($data['fb']);
        $twitter    = $this->fm->validation($data['twitter']);
        $youtube    = $this->fm->validation($data['youtube']);
        $instagram    = $this->fm->validation($data['instagram']);
        $copyright    = $this->fm->validation($data['copyright']);
        $linkedin    = $this->fm->validation($data['linkedin']);
        $fb_page    = $this->fm->validation($data['fb_page']);

        $title   = mysqli_real_escape_string($this->db->link, $title);
        $address   = mysqli_real_escape_string($this->db->link, $address);
        $phone = mysqli_real_escape_string($this->db->link, $phone);
        $email    = mysqli_real_escape_string($this->db->link, $email);
        $google   = mysqli_real_escape_string($this->db->link, $google);
        $fb    = mysqli_real_escape_string($this->db->link, $fb);
        $twitter    = mysqli_real_escape_string($this->db->link, $twitter);
        $about    = mysqli_real_escape_string($this->db->link, $about);
        $youtube    = mysqli_real_escape_string($this->db->link, $youtube);
        $instagram    = mysqli_real_escape_string($this->db->link, $instagram);
        $copyright    = mysqli_real_escape_string($this->db->link, $copyright);
        $copyright    = mysqli_real_escape_string($this->db->link, $copyright);
        $linkedin    = mysqli_real_escape_string($this->db->link, $linkedin);
        $fb_page    = mysqli_real_escape_string($this->db->link, $fb_page);

        if ($title == '' || $address == '' || $phone == '' || $email == '' || $google == '' || $fb == '' || $twitter == '' || $about == '' || $instagram == '' || $copyright == '') {
            $msg = 'All Filed is Required';
            return $msg;
        } else {
            $query = "UPDATE default_setting SET 
            title = '$title', 
            address = '$address',
            phone = '$phone',
            email = '$email',
            google = '$google',
            fb = '$fb',
            twitter = '$twitter',
            about = '$about',
            youtube = '$youtube',
            instagram = '$instagram',
            copyright = '$copyright',
            linkedin = '$linkedin',
            fb_page = '$fb_page'
            where id = 1";
            $result = $this->db->update($query);
            if ($result) {
                $title = '';
                $address = '';
                $phone = '';
                $email = '';
                $google = '';
                $fb = '';
                $twitter = '';
                $instagram = '';
                $about = '';
                session::set('success', 'Update Successfully');
            } else {
                session::set('warning', 'There Was Something Wrong');
            }
        }
    }

    public function showById($id)
    {
        $query = "SELECT * FROM default_setting LIMIT 1";
        $result = $this->db->select($query);
        return $result;
    }
}
?>