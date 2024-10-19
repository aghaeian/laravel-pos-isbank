<x-shop::layouts.account>
    <!-- Title of the page -->
    <x-slot:title>
        @lang('isbank::app.admin.system.isbankPayment')
    </x-slot:title>

    <div class="flex justify-between items-center">
        <h2 class="text-[26px] font-medium">
            @section('page_title')
				{{ __('isbank Checkout....') }}
			@stop

			@push('scripts')
				<?php echo $paymentcontent_msg; ?>
			@endpush
        </h2>
    </div>
</x-shop::layouts.account>
