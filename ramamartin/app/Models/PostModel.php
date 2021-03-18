<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class PostModel extends Model{
        protected $table="posts";
        protected $primaryKey="id";
        protected $returntype="array";
        protected $useSoftDelates=true;

        protected $allowedFields=["banner","title","intro","content","category","tags","create_at","create_by"];
    }
?>