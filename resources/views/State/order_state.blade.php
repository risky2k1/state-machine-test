<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>
<body>

        <section>
            <h2>Order Information</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <td>{{$order->id}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $order->state}}</td>

                </tr>
            </table>
        </section>
        <section>
            <h2>Update Order Status</h2>
            <form method="POST" action="  {{ route('orders.update', $order) }}">
                @csrf
                @method('PUT')
                <label for="state">Status:</label>
                <select name="state" id="state">
                    @foreach ($states as $state)
                        <option value="{{ $state }}">{{ $state }}</option>
                    @endforeach
                </select>
                <button type="submit">Save</button>
            </form>
        </section>
        <section>
            <h2>Order Status Change History</h2>
            <table>
                <thead>
                <tr>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($history_status as $history)
                    <tr>
                        <td>{{ $history->to_state ?? ''}}</td>
                        <td>{{ $history->created_at->format('Y-m-d H:i:s') ?? ''}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
</body>
</html>
