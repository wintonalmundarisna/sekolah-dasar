<!DOCTYPE html>
<html>
<head>
    <title>PDF Document</title>
</head>
<body>
    @php
        // dd($data['surat_keputusan']);
        $url = asset("storage/sk_ppdb/{$data['surat_keputusan']}");
    @endphp
    <iframe src="{{ $url }}" width="100%" height="600px"></iframe>
    {{-- {{ $data['surat_keputusan'] ?? 'No data available' }} --}}
</body>
</html>