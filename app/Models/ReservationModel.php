<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'reservations'; // Assuming 'reservations' is your table name
    protected $primaryKey = 'id'; // Assuming 'id' is your primary key column
    protected $allowedFields = ['date', 'time', 'people', 'full-name', 'phone','email', 'message']; // List of fields that can be mass-assigned

    public function insertReservation($data)
    {
        $this->insert($data);
        return $this->db->insertID(); // Return the ID of the inserted row
    }
}
