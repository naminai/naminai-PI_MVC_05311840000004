<?php
 
namespace App\Models;
 
use App\Core\Model;
 
use PDO;
use PDOException;
 
class Donasi extends Model
{
 
    public static function findAll()
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->query('SELECT * FROM rekapitulasi');
 
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
            return $results;
            
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }

    public static function findrekapitulasiById($id)
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->prepare('SELECT * FROM rekapitulasi where id = :id');
            $stmt->bindParam(":id", $id);
 
            $stmt->execute();
 
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
 
            return $results;
 
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }

    public function insert($data)
    {
        try {
            $db = static::getDb();
 
            $sql = "INSERT INTO rekapitulasi VALUES('', :jenisDonasi, :namaDonatur, :bentukDonasi, :jumlahDonasi, :time)";
 
            $stmt = $db->prepare($sql);
            
            $stmt->bindParam(":jenisDonasi", $data['title']);
            $stmt->bindParam(":namaDonatur", $data['description']);
            $stmt->bindParam(":bentukDonasi", $data['place']);
            $stmt->bindParam(":jumlahDonasi", $data['spot']);
            $stmt->bindParam(":time", $data['time']);
 
            $stmt->execute();
 
            return $stmt->rowCount();
 
        } catch (PDOException $e) {
            echo "Terjadi kegagalan saat menyimpan data";
        }
    }

    public static function delete($id)
    {
 
        try {
 
            $db = static::getDb();
 
            $sql = "DELETE FROM rekapitulasi WHERE id = :id";
 
            $stmt = $db->prepare($sql);
            
            $stmt->bindParam(":id", $id);
 
            $stmt->execute();
 
            return $stmt->rowCount();
 
        } catch (PDOException $e) {
            echo "Terjadi kegagalan saat menghapus data";
        }
    }

    public function search($keyword)
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->prepare('SELECT * FROM rekapitulasi where namaDonatur LIKE :title');
            $stmt->bindValue(":title", "%$keyword%");
 
            $stmt->execute();
 
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
            return $results;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }

    public function searchByJenis($keyword)
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->prepare('SELECT * FROM rekapitulasi where jenisDonasi LIKE :title');
            $stmt->bindValue(":title", "%$keyword%");
 
            $stmt->execute();
 
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
            return $results;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }



}
