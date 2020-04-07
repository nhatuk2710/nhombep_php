@component('mail::message')
# Introduction

Total of bill : {{$order->grand_total}}
Anh yeu em rat nhieu

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
