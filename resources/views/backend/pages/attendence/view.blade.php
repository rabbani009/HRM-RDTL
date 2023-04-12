<form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="file" class="form-label">CSV File</label>
        <input type="file" name="file" class="form-control" id="file" required>
    </div>

    <div class="mb-3">
        <label for="start_date" class="form-label">Start Date</label>
        <input type="date" name="start_date" class="form-control" id="start_date" required>
    </div>

    <div class="mb-3">
        <label for="end_date" class="form-label">End Date</label>
        <input type="date" name="end_date" class="form-control" id="end_date" required>
    </div>

    <button type="submit" class="btn btn-primary">Import</button>
</form>