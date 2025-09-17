<?php

class process extends config
{
    public function tableCount($table)
    {
        $sorgu = $this->db->prepare("SELECT * from " . $table);
        $sorgu->execute();
        return $sorgu->rowCount();
    }
}
