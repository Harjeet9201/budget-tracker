 @extends('layout.app')

 @section('content')
     <div class="container">
             <div class="four col-md-3">
                 <div class="counter-box colored">
                     <img src="{{ asset('admin/income.png') }}" alt="chart success" class="rounded" />

                     <span class="counter">{{ $totalIncome }}</span>
                     <p>Total Income</p>
                 </div>
             </div>
             <div class="four col-md-3">
                 <div class="counter-box">
                     <img src="{{ asset('admin/expence.png') }}" alt="Credit Card" class="rounded" />

                     <span class="counter">{{ $totalExpense }}</span>
                     <p>Total Expenditure</p>
                 </div>
             </div>
             <div class="four col-md-3">
                 <div class="counter-box">
                     <img src="{{ asset('admin/balance.png') }}" alt="Credit Card" class="rounded" />
                     <span class="counter">{{ $balance }}</span>
                     <p>Balance</p>
                 </div>
             </div>
     </div>
 @endsection
