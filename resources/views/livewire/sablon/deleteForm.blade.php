<form method="POST" 
    action="{{ $param }}"
    class="form d-inline-block" 
    title="Delete">
    @method('delete')
    @csrf
    <button type="submit" 
        class="btn btn-danger btn-sm shadow-sm" 
        title="{{ __('messages.Delete') }}" 
        onclick="return confirm('Biztos törölni akarja?')" >
        <i class="fas fa-trash-alt"></i>
    </button>
</form>