@if (session()->has('message'))
<div class="toast" id="myToast">
    <div class="toast-header">
        <strong class="me-auto"><i class="bi-gift-fill">{{ session('message') }}</i></strong>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#myToast").toast({
            delay: 3000
        });
        $("#myToast").toast("show");
    });
</script>
@endif