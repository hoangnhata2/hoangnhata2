<?php
class DbModel
{
    private $host;
    private $userName;
    private $passWord;
    private $dbName;
    public $error;
    public $table;
    public function __construct()
    {
        $this->host = "localhost";
        $this->userName = "root";
        $this->passWord = "";
        $this->dbName = "watch";
    }
    //success tra ve so row thuc thi
    public function excuteNonQuery($query, $param)
    {
        # code...
        $this->error = null;
        try {
            $conn = $this->openConnection();
            if ($conn->connect_errno != 0) {
                # code...
                throw new Exception("Error connect");
            }
            $stmt = $conn->prepare($query);
            //check câu truy vấn SQL
            if ($stmt === false) {
                # code...
                throw new Exception("SQL wrong");
            }
            //check có tham số truyền vào ?
            $this->passParamatter($stmt, $param);
            $stmt->execute();
            return $stmt->affected_rows;

        } catch (Exception $e) {
            $this->error = $e->getMessage();
        } finally {
            $conn->close();
            $stmt->close();
        }

    }
    //sucess tra ve array ket qua
    public function exuteQuery($query, $param = null)
    {
        # code...
        $this->error = null;
        $MKetQua = array();
        try {
            $conn = $this->openConnection();
            if ($conn->connect_errno != 0) {
                # code...
                throw new Exception("Error connect");
            }
            $stmt = $conn->prepare($query);
            //check câu truy vấn SQL
            if ($stmt === false) {
                # code...
                throw new Exception("SQL wrong");
            }
            //check có tham số truyền vào ?
            $this->passParamatter($stmt, $param);
            $stmt->execute();
            $rs = $stmt->get_result();
            $MKetQua = array();
            if ($rs) {
                while ($row = $rs->fetch_assoc()) {
                    $MKetQua[] = $row;
                }
            }
           
        } catch (Exception $e) {
            $this->error = $e->getMessage();
        } finally {
            $conn->close();
            $stmt->close();
        }
        return $MKetQua;
    }
    private function passParamatter(&$stmt, $param)
    {
        # code...
        if ($param != null) {
            # code...
            $tempvalue = array();
            $tempkey = "";
            $n = count($param);
            for ($i = 0; $i < $n; $i++) {
                # code...
                $tempvalue[] = &$param[$i];
            }
            foreach ($param as $value) {
                # code...
              $tempkey.=(is_string($value))?"s":((is_int($value))?"i":((is_double($value)?"d":"b")));

            }
       
            array_unshift($tempvalue, $tempkey);
            call_user_func_array(array($stmt, 'bind_param'), $tempvalue);
        }

    }
    private function openConnection()
    {
        # code...
        $conn = new mysqli($this->host, $this->userName, $this->passWord, $this->dbName);
        $conn->set_charset("utf8");
        return $conn;
    }

}
