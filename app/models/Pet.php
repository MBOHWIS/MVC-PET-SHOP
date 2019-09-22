<?php
class Pet extends Model
{
    public function all()
    {
        $query = $this->db->prepare('SELECT * FROM pet');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function Insert($data)
    {
        $query = $this->db->prepare("INSERT INTO pet VALUES ( :name,:owner,:species,:sex,:birth,:death)");
        $query->bindParam(':name', $data['name']);
        $query->bindParam(':owner', $data['owner']);
        $query->bindParam(':species', $data['species']);
        $query->bindParam(':sex', $data['sex']);
        $query->bindParam(':birth', $data['birth']);
        $query->bindParam(':death', $data['death']);
        $query->execute();
        return $query->rowCount();
    }
    public function Find($name)
    {
        $query = $this->db->prepare("SELECT * FROM pet WHERE name=:name");
        $query->bindParam(':name', $name);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function Update($data)
    {
        $query = $this->db->prepare("UPDATE pet SET owner=:owner, species=:species, sex=:sex, birth=:birth, death=:death WHERE name=:name");
        $query->bindParam(':name', $data['name']);
        $query->bindParam(':owner', $data['owner']);
        $query->bindParam(':species', $data['species']);
        $query->bindParam(':sex', $data['sex']);
        $query->bindParam(':birth', $data['birth']);
        $query->bindParam(':death', $data['death']);
        $query->execute();
        return $query->rowCount();
    }
    public function Delete($name){
        $query=$this->db->prepare("DELETE FROM pet WHERE name=:name");
        $query->bindParam(':name',$name);
        $query->execute();
        return $query->rowCount();
    }
}
