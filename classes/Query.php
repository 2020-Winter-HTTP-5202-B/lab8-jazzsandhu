<?php
class Query{

    public function list_query( $db, $country)
    {
        $sql = "select * from offices where country= :country";
        //here we are preparing this query with the constructor function dbcon
        //which we gonna relate with database class
        //while we call the function
        $pdostm = $db->prepare($sql);
        $pdostm->bindvalue(':country',$country, PDO::PARAM_STR);
        //execute it
        $pdostm->execute();
        $office_list = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $office_list;
    }
    public function country_query($db)
    {
        $sql = "select distinct country from offices";
        $pdostm = $db->prepare($sql);
        //execute it
        $pdostm->execute();
        $country_list = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $country_list;

    }
}