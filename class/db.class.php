<?php
class DB
{
    function insert($in, $table)
    {
        $tabval = $table;
        if (is_array($in)) 
        {
            foreach ($in as $id => $row) 
            {
                if ( !empty($row) ) 
                {
                    $id = (string) $id;
                    $nameVal[] = mysql_real_escape_string($id);
                    $Val[] = "'" . mysql_real_escape_string($row) . "'";
                }
            }
        }

        if (!empty($nameVal) && !empty($Val) && (count($nameVal) == count($Val))) 
        {
            $name_field = implode(",", $nameVal);
            $val_field = implode(",", $Val);

            $sql = 'INSERT INTO ' . $table . ' (' . $name_field . ') Values(' . $val_field . ')';
            $result = mysql_query($sql);
            $id = mysql_insert_id();

        }
        
        return $id;
    }
    
    function update($in, $table, $where)
    {
        if (is_array($in)) 
        {
            foreach ($in as $id => $row) 
            {
                if ( !empty($row) ) 
                {
                    $nameVal = mysql_real_escape_string($id);
                    $Val = "'" . mysql_real_escape_string($row) . "'";
                    $updateSql[]=$nameVal.' = '.$Val;
                }
            }
        }
        
        if( !empty($updateSql) )
        {
           $updateSqlStr = implode(",", $updateSql);
           $sql = 'UPDATE '.$table.' SET '.$updateSqlStr.' '.$where;
           $result = mysql_query($sql);  
        }
    }
    
    function delete($table, $where)
    {
        $sql = 'DELETE FROM '.$table.' '.$where;
        $result = mysql_query($sql);
    }
    
   	function query($sql)
	{
		$res = mysql_query($sql);
        while($row = mysql_fetch_array($res)) 
        {
            $result[] = $row;
        }
		return $result;		
	}
    
}