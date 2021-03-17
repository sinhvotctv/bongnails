<?php
  class Database{
    private $hostName = 'localhost';
    private $userName = 'bongnails';
    private $password = 'Sinh@1993';
    private $databaseName = 'bongnails';

    public function connect(){
      $connect = mysqli_connect($this -> hostName, $this -> userName, $this -> password, $this -> databaseName);
      return  $connect;
    }

    public function select($table, $colums,$conditions = ''){
      $query = '';
      if(isset($table)  && isset($colums)){
        switch(gettype($conditions)){
          case 'string':
            if($conditions !== ''){
              switch(gettype($colums)){
                case "string":
                  if(gettype($table) === 'string' && $table !== ''){
                    if($colums!==''){
                      if($colums==='*'){
                        $query = "SELECT * FROM `".$table."` WHERE `id`=".$conditions;
                      }else{
                        $query = "SELECT `".$colums."` FROM `".$table."` WHERE `id`=".$conditions;
                      }
                    }
                  }
                  break;
                case 'array':
                  if(gettype($table) === 'string' && $table !== ''){
                    $queryTmp = '';
                    for($i = 0; $i<count($colums); $i++){
                      $queryTmp.="`".$colums[$i]."`,";
                    }

                    $query = "SELECT ".rtrim($queryTmp, ",")." FROM `".$table."` WHERE `id`=".$conditions;
                  }
                  break;
              }
            }else{
              switch(gettype($colums)){
                case "string":
                  if(gettype($table) === 'string' && $table !== ''){
                    if($colums!==''){
                      if($colums==='*'){
                        $query = "SELECT * FROM `".$table."`";
                      }else{
                        $query = "SELECT `".$colums."` FROM `".$table."`";
                      }
                    }
                  }
                  break;
                case 'array':
                  if(gettype($table) === 'string' && $table !== ''){
                    $queryTmp = '';
                    for($i = 0; $i<count($colums); $i++){
                      $queryTmp.="`".$colums[$i]."`,";
                    }

                    $query = "SELECT ".rtrim($queryTmp, ",")." FROM `".$table."`";
                  }
                  break;
              }
            }
            break;
        }
      }
      $result = mysqli_query($this->connect(), $query);
      $arr = array();
      if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
          array_push($arr,$row);        
        }	
      }
      return $arr;
    }
  }
?>