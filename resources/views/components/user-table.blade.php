<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full w-100 border border-pink-200 text-sm" style="width: 100%;">
        <thead class="bg-pink-500 text-black">
            <tr>
                <th class="px-4 py-2 border border-pink-200 text-center">ID</th>
                <th class="px-4 py-2 border border-pink-200 text-center">Nama</th>
                <th class="px-4 py-2 border border-pink-200 text-center">NPM</th>
                <th class="px-4 py-2 border border-pink-200 text-center">Kelas</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
                <tr class="hover:bg-pink-50 transition text-center">
                    <td class="px-4 py-2 border border-pink-200">{{ $user->id }}</td>
                    <td class="px-4 py-2 border border-pink-200">{{ $user->nama }}</td>
                    <td class="px-4 py-2 border border-pink-200">{{ $user->nim }}</td>
                    <td class="px-4 py-2 border border-pink-200">{{ $user->nama_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
