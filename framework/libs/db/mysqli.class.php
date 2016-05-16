<?php
class mysqlidb{
    
    private $mysqli;
   // private $query;    //执行sql语句放回值
    //构造函数：主要用来返回一个mysqli对象  
    public function  __construct($config) {  
        extract($config);
        $this->mysqli    = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);  
        if($this->mysqli->connect_errno) {  
            $this->mysqli    = false;  
            echo '<h2>'.$this->mysqli->connect_error.'</h2>';  
            die();  
        } else {  
            $this->mysqli->set_charset($dbcharset);  
        }  
    }  
    //析构函数：主要用来释放结果集和关闭数据库连接  
    public function  __destruct() {  
        $this->free();  
        $this->close();  
    }  
    //释放结果集所占资源  
    protected function free() {  
        @$this->rs->free();  
    }  

     //关闭数据库连接  
    protected function close() {  
        $this->mysqli->close();  
    }  
    /**
     * 报错函数
     * @param  string $error 
     * @return string        
     */
    function err($error){
        //die函数有两种作用，一个是输出，另一个是终止，相当于echo和exit。
        die("对不起，您的操作有误，原因是：".$error);
    }

    /**
     * 执行sql语句
     * @param  string $sql 
     * @return bool      
     */
    function query($sql){
        if($query = $this->mysqli->query($sql)){
            return $query;
        }else{
            $this->err($sql."<br>".$this->mysqli->error);
        }
    }

    

    /**
     * 查找一条
     * @param  string $query 
     * @return array        放回一条数组
     */
   public function fetchOne($query){
        $rs = $query->fetch_array(MYSQLI_ASSOC);
        return $rs;
    }

    /**
     * 查找所有数据
     * @param  string $query 
     * @return array        返回所有数组
     */
    function fetchAll($query){
        //mysql_fetch_array将资源转换为数组，一次转换一行
        while($rs = $query->fetch_array(MYSQL_ASSOC)){
            $list[] = $rs;
        }
        //检查是否有list数组
        return isset($list)?$list:"";
    }

    /**
     * 查找指定行指定字段的值
     * @param  string  $query 
     * @param  int $row   
     * @param  string $field 字段
     * @return string         
     */
    // function fetchResult($query,$row=0,$filed=0){
    //     $rs = mysql_result($query, $row,$filed);
    //     return $rs;
    // }
    
    /**
     * 获取数据总条数
     */
    function getTotal($table){
        $sql = "select count(*) from ".$table;
        $result = $this->query($sql);
        $total_num = $this->fetchOne($result);
        return $total_num['count(*)'];
    }

    //insert into table(`a`,`b`,`c`) values('1','2','3')
    /**
     * 插入数据
     * @param  string $table 
     * @param  array $arr   array('a'=>'1','b'=>'2')
     * @return int        返回插入数据的id
     */
    function insert($table,$array){
        // $keys = array_keys($arr);  //获得数组的部分或全部键
        // $values = array_values($arr);  //获得数组的键所对应的值
        foreach ($array as $key => $value) {
            $value = $this->mysqli->real_escape_string($value);
            $keyArr[] = '`'.$key.'`';
            $valueArr[] = "'".$value."'";
            $keys = implode(",",$keyArr);//将一个一位数组转化为字符串,输出`a`,`b`格式
            $values = implode(",",$valueArr);
        }
        $sql = "insert into ".$table."(".$keys.") values(".$values.")";
        $this->query($sql);
        return $this->mysqli->insert_id;
    }

    //update table set username='hengwen' where id = 1
    /**
     * 更新数据
     * @param  string $table 
     * @param  array $array 如：array('a'=>'1')
     * @param  string $where 如：id=1
     * @return  bool      
     */
    function update($table,$array,$where=null){
        foreach ($array as $key => $value) {
            $value = $this->mysqli->real_escape_string($value);
            $keyAndValueArr[] = "`".$key."`='".$value."'";
        }
        $keyAndValues = implode(",", $keyAndValueArr);
        $sql = "update ".$table." set ".$keyAndValues." where ".$where;
        if($this->query($sql)){
            return true;
        }else{
            return false;
        }

    }
    //delete from table where id=1;
    /**
     * 删除
     * @param  string $table 
     * @param  string $where 
     * @return bool        
     */
    function delete($table,$where){
        $sql = "delete from ".$table." where ".$where;
        if($this->query($sql)){
            return true;
        }
    }


}



?>