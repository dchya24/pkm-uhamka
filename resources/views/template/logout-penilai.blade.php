<form action="{{ route("penilai.logout") }}" method="POST" name="penilai-logout" class="d-none">
    @csrf
    <input type="hidden" name="_jenis_penilai" value="{{ $jenisPenilai}}">
</form>