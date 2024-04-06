<?php

namespace App\Controllers;
use App\Models\ReservationModel;
use App\Models\ContactModel;
use CodeIgniter\Session\Session;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function about(): string
    {
        return view('about');
    }
    public function book_table(): string
    {
        return view('book_table');
    }

    protected $session;
    protected $reservationModel;
    protected $validation;
    protected $db;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->reservationModel = new ReservationModel();
        $this->validation = \Config\Services::validation();
        $this->db = \Config\Database::connect();
    }
     // Add this method to handle form submission
     public function submit_booking()
     {
            // Define validation rules
        $rules = [
            'email' => 'required|valid_email',
            'phone' => 'required|min_length[10]|numeric'
        ];

        // Define custom error messages
        $messages = [
            'email' => [
                'required' => 'Email address is required.',
                'valid_email' => '❌Please enter a valid email address.'
            ],
            'phone' => [
                'required' => 'Phone number is required.',
                'numeric' => '❌Please enter a valid phone number.',
                'min_length' => '❌The phone number must be at least 10 characters long.'
            ]
        ];

        // Set validation rules and messages
        $this->validation->setRules($rules, $messages);

        // Run validation
        if (!$this->validation->run($this->request->getPost())) {
            // Set validation error messages in session flashdata
            $this->session->setFlashdata('error', $this->validation->getErrors());
            // Redirect back to the form page
            return redirect()->to(site_url('book_table'));
        }

        // If validation passes, proceed with form submission
         // Assuming you have form data available in POST
         $data = [
             'date' => $this->request->getPost('date'),
             'time' => $this->request->getPost('time'),
             'people' => $this->request->getPost('people'),
             'full-name' => $this->request->getPost('full-name'),
             'phone' => $this->request->getPost('phone'),
             'email' => $this->request->getPost('email'),
             'message' => $this->request->getPost('message')
         ];
     
         // Call the model method to insert data into the database
    $reservationId = $this->reservationModel->insertReservation($data);

    // Check if the reservation was successfully inserted
    if ($reservationId) {
        // Set a success message in session flashdata
        $this->session->setFlashdata('success', '👍😊Reservation successfully submitted.');
    } else {
        // Set an error message if insertion fails
        $this->session->setFlashdata('error', 'Failed to submit reservation. Please try again.');
    }

    // Redirect back to the form page
    return redirect()->to(site_url('book_table'));
     }
        


    public function menu(): string
    {
        return view('menu');
    }
    public function blog(): string
    {
        return view('blog');
    }
    public function testimonials(): string
    {
        return view('testimonials');
    }
    

    public function contact(): string
{
    $data = [];

    if ($this->request->getMethod() === 'post') {
        // Retrieve form input
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        // Perform validation
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            // Set error message if any field is empty sove thias error
            $data['error'] = 'All fields are required.';
        } else {
            // Insert data into the database
            $insert_array = [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message // Store hashed password
            ];

            $builder = $this->db->table('contact');
            $result = $builder->insert($insert_array);

            // Check if data was inserted successfully'
            if ($result) {
                // Set success message
                $this->session->setFlashdata('success', '👍😊Response submitted.');
               

            } else {
                // Set error message if insertion failed
                $this->session->setFlashdata('error', 'Failed to submit response. Please try again.');
            }

        }
    }

    // Load the register view with any validation messages
    return view('contact', $data);
}








    public function blog_details(): string
    {
        return view('blog_details');
    }
    public function special_offer(): string
    {
        return view('special_offer');
    }
}
