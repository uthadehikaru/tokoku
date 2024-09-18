@extends('layouts.web')
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
    <a href="{{ route('logout') }}" class="btn btn-warning btn-xs mb-6">Keluar</a>
    <div class="overflow-x-auto">
        <table class="table table-zebra w-full">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Order No</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                        <td><a href="{{ route('order-summary', $order) }}" class="text-primary font-bold hover:text-blue-500">{{ $order->order_no }}</a></td>
                        <td>Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                        <td>
                            <span class="badge badge-{{ $order->status === 'completed' ? 'success' : 'warning' }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-6">
        {{ $orders->links() }}
    </div>
</div>
@endsection