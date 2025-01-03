<?php

namespace App\Livewire;

use Livewire\Component;

class Chatbot extends Component
{
    public $message = '';       // Untuk pesan yang diketik pengguna
    public $chatHistory = [];   // Riwayat percakapan

    // Fungsi untuk menangani pengiriman pesan
    public function sendMessage()
    {
        // Tambahkan pesan pengguna ke riwayat
        $this->chatHistory[] = ['user' => 'You', 'message' => $this->message];

        // Dapatkan respons bot
        $response = $this->getResponse($this->message);

        // Tambahkan respons bot ke riwayat
        $this->chatHistory[] = ['user' => 'Bot', 'message' => $response];

        // Kosongkan input
        $this->message = '';
    }

    // Logika chatbot sederhana
    private function getResponse($message)
    {
        $responses = [
            'halo' => 'Halo, Ada yang bisa dibantu?',
            'layanan' => 'Kami menyediakan layanan pembelajaran bahasa mandarin online.',
            'harga' => 'Harga kelas kami bervariasi tergantung tingkat kesulitan dan kerincian materi.',
        ];

        foreach ($responses as $key => $reply) {
            if (str_contains(strtolower($message), $key)) {
                return $reply;
            }
        }

        return "Sorry, I don't understand. Can you rephrase?";
    }

    public function render()
    {
        return view('livewire.chatbot');
    }
}
