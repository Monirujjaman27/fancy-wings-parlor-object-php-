<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>


<?php
class Appointments
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function showMessage()
    {
        $query = "SELECT * FROM appointment order by id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function delMessage($gatCatId)
    {
        $delquery = "DELETE FROM appointment WHERE id = '$gatCatId'";
        $delcat = $this->db->delete($delquery);
        if ($delcat) {
            $msg = "<p class='mb-0 alert alert-success'>Delete Success</p>";
            return $msg;
        } else {
            $msg = '<p class="mb-0 text-warning">There Was Something Wrong to Delete the Message</p>';
            return $msg;
        }
    }
    public function showvalcalt($gatCatId)
    {
        $query = "SELECT * FROM appointment WHERE id = '$gatCatId'";
        $result = $this->db->select($query);
        return $result;
    }
    public function ttlrow()
    {
        $query = "SELECT COUNT(*) FROM count_demos;";
        $result = $this->db->select($query);
        return $result;
    }
}
?>