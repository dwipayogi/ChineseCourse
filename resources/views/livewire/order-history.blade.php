<div class="p-4 max-w-7xl m-auto">
    <h2 class="text-xl font-bold mb-4">Riwayat Pemesanan</h2>

    <table class="min-w-full bg-white border rounded-lg">
        <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="py-2 px-4 border">#</th>
                <th class="py-2 px-4 border">Nomor Transaksi</th>
                <th class="py-2 px-4 border">Jumlah</th>
                <th class="py-2 px-4 border">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $key => $order)
                <tr class="{{ $key % 2 === 0 ? 'bg-gray-50' : '' }}">
                    <td class="py-2 px-4 border text-center">{{ $key + 1 }}</td>
                    <td class="py-2 px-4 border">{{ $order->transaction_number }}</td>
                    <td class="py-2 px-4 border text-right">Rp{{ number_format($order->amount, 0, ',', '.') }}</td>
                    <td class="py-2 px-4 border text-center">{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="py-4 text-center text-gray-500">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
