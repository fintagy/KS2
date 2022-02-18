<button wire:click="closeModalPopover()"
         type="button"
         class="btn btn-secondary btn-sm shadow-sm"
         title="{{ __('messages.Back') }}">
         <i class="fas fa-arrow-left"></i>
</button>
<button wire:click.prevent="store()" 
        type="button" 
        class="btn btn-success btn-sm shadow-sm" 
        title="{{ __('messages.Save') }}">
        <i class="fas fa-save"></i>
</button>