<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\Barangbeli;
use App\Models\Client;
use App\Models\Transaksi;
use Livewire\Component;

class AturOrder extends Component
{
    public $detail = false;
    public $transaksi = null;
    public $client = null;
    public $barang = null;

    public function render()
    {
        $data = Transaksi::latest()->get();
        foreach ($data as $d) {
            $client = Client::find($d->client_id);
            $d->namaewa = $client->name;
        }
        return view('livewire.atur-order', [
            'data' => $data,
        ]);
    }

    public function detail($id)
    {
        $this->detail = true;
        $this->transaksi = Transaksi::find($id);
        $this->client = Client::find($this->transaksi->client_id);
        $this->barang = Barangbeli::where('trans_id', $id)->get();
        foreach ($this->barang as $b) {
            $b->benda = Barang::find($b->barang_id);
        }
    }

    public function back()
    {
        $this->detail = false;
    }
}
