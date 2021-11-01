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
    public function updateDefaults($data)
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


        if ($title == '' || $address == '' || $phone == '' || $email == '' || $google == '' || $fb == '' || $twitter == '' || $about == '' || $instagram == '' || $copyright == '') {
            $msg = 'All Filed is Required';
            return $msg;
        } else {
            $query = "UPDATE default_setting SET title = '$title', address = '$address', phone = '$phone', email = '$email', google = '$google', fb = '$fb', twitter = '$twitter', about = '$about', youtube = '$youtube', instagram = '$instagram', copyright = '$copyright' where id = 1";
            $result = $this->db->update($query);
            if ($result) {
                $msg = "<p class='mb-0 alert alert-success'>Update Success</p>";
                $title = '';
                $address = '';
                $phone = '';
                $email = '';
                $google = '';
                $fb = '';
                $twitter = '';
                $instagram = '';
                $about = '';
                return $msg;
            } else {
                $msg = '<p class="mb-0 text-danger">There Was Something Wrong</p>';
                return $msg;
            }
        }
    }

    public function showById()
    {
        $query = "SELECT * FROM default LIMIT 1";
        $result = $this->db->selectSingle($query);
        echo $result;
        return $result;
    }
}
?>