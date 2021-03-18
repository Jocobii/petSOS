<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Newsletter extends Model{
        protected $table="posts";
        protected $primaryKey="id";
        protected $returntype="array";
        protected $useSoftDelates=true;

        protected $allowedFields=["id","mail","deleted","added_at"];
    }
?>