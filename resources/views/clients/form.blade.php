<div class="container-fluid">

    <div class="row">
        <div class="form-group col-md-6">
            {!! Form::label('name', __('نام کمپانی'), ['class' => 'control-label']) !!} <span class="text-danger">*</span>
            {!! Form::text('name', $data['name'] ?? null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('vat', __('نام نماینده'), ['class' => 'control-label']) !!}
            {!! Form::text('vat', $data['vat'] ?? null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('billing_address1', __('آدرس صورتحساب 1'), ['class' => 'control-label']) !!}
                    {!! Form::text('billing_address1', $data['billing_address1'] ?? null, ['class' => 'form-control']) !!}
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('billing_address2', __('آدرس صورتحساب 2'), ['class' => 'control-label']) !!}
                    {!! Form::text('billing_address2', $data['billing_address2'] ?? null, ['class' => 'form-control']) !!}
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-4 col-sm-6">
                    {!! Form::label('billing_city', __('شهر صورتحساب'), ['class' => 'control-label']) !!}
                    {!! Form::text('billing_city', $data['billing_city'] ?? null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    {!! Form::label('billing_state', __('منطقه صورتحساب'), ['class' => 'control-label']) !!}
                    {!! Form::text('billing_state', $data['billing_state'] ?? null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    {!! Form::label('billing_zipcode', __('کد پستی صورتحساب'), ['class' => 'control-label']) !!}
                    {!! Form::text('billing_zipcode',  $data['billing_zipcode'] ?? null,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-12 col-sm-6">
                    {!! Form::label('billing_country', __('کشور صورتحساب'), ['class' => 'control-label']) !!}
                    {!! Form::text('billing_country', $data['billing_country'] ?? null, ['class' => 'form-control']) !!}
                </div>
            </div>

        </div>
        <div class="col-md-6">
            
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('shipping_address1', __('آدرس حمل و نقل 1'), ['class' => 'control-label']) !!}
                    {!! Form::text('shipping_address1', $data['shipping_address1'] ?? null, ['class' => 'form-control']) !!}
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('shipping_address2', __('آدرس حمل و نقل 2'), ['class' => 'control-label']) !!}
                    {!! Form::text('shipping_address2', $data['shipping_address2'] ?? null, ['class' => 'form-control']) !!}
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-4 col-sm-6">
                    {!! Form::label('shipping_city', __('شهر حمل و نقل'), ['class' => 'control-label']) !!}
                    {!! Form::text('shipping_city', $data['shipping_city'] ?? null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    {!! Form::label('shipping_state', __('منطقه حمل ونقل'), ['class' => 'control-label']) !!}
                    {!! Form::text('shipping_state', $data['shipping_state'] ?? null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    {!! Form::label('shipping_zipcode', __('کد پستی حمل و نقل'), ['class' => 'control-label']) !!}
                    {!! Form::text('shipping_zipcode',  $data['shipping_zipcode'] ?? null,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-12 col-sm-6">
                    {!! Form::label('shipping_country', __('کشور حمل و نقل'), ['class' => 'control-label']) !!}
                    {!! Form::text('shipping_country', $data['shipping_country'] ?? null, ['class' => 'form-control']) !!}
                </div>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6">
            {!! Form::label('primary_number', __('تلفن اصلی'), ['class' => 'control-label']) !!}
            {!! Form::text('primary_number', $data['primary_number'] ?? null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('secondary_number', __('تلفن یا فکس فرعی'), ['class' => 'control-label']) !!}
            {!! Form::text('secondary_number', $data['secondary_number'] ?? null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-12">
            {!! Form::label('primary_email', __('ایمیل اصلی'), ['class' => 'control-label']) !!}
            {!! Form::email('primary_email', $data['primary_email'] ?? null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6">
            {!! Form::label('company_type', __('نوع کمپانی'), ['class' => 'control-label']) !!}
            {!! Form::text('company_type', $data['company_type'] ?? null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('industry_id', __('صنعت'), ['class' => 'control-label']) !!}  <span class="text-danger">*</span>
            {!! Form::select('industry_id', $industries, $data['industry_id'] ?? null, ['class' => 'form-control ui search selection top right pointing search-select', 'id' => 'search-select', 'placeholder' => 'Select an industry...']) !!}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-12">
            {!! Form::label('user_id', __('Assign user'), ['class' => 'control-label']) !!}
            {!! Form::select('user_id', $users, $data['user_id'] ?? Auth::user()->id, ['class' => 'form-control ui search selection top right pointing search-select', 'id' => 'search-select']) !!}
        </div>
    </div>

    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}    

</div>
