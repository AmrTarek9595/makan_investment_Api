@extends('layouts.dashboard')

@section('contact')

<style>
    .card_img{
       width: 100% !important;
       height:100% !important;
       object-fit:contain !important;
    }
     .card-img-overlay{
         transition-duration:0.5s !important;

     }
     .card-img-overlay:hover{
         background-color:rgba(0,0,0,0.5);
         transition-duration:0.5s !important;
     }
     .card_control{
         display:none;
         width: 50px;
         height: 50px;
         border-radius:50%;

     }
     .hide_show{
       visibility:hidden;
     }

     .card-img-overlay:hover .card_control{
         display:block;
         display: flex;
         justify-content:center;
         align-items:center;
     }
     .card-img-overlay:hover .hide_show{
       visibility:visible;
       transition-duration:0.5s;

     }
 </style>
<div class="content-wrapper">

    <section class="content">
       <div class="container-fluid">
          <div class="row ">
             <div class="col-12 mt-3">
                <h4>Contact Us Messages</h4>
             </div>
          </div>
          <div class="row mt-3">
             <div class="col-12 ">
                <div class="card">
                   <div class="card-body">
                      <table class="table table-striped" id="example1">
                         <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>View</th>
                         </thead>


                         <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>
                                        @if ($d->name && $d->name !== null)
                                        {{ $d->name }}
                                        @else
                                        <p style="color: darkred">No data available</p>
                                        @endif

                                    </td>
                                <td>
                                    @if ($d->email && $d->email !== null)
                                    {{ $d->email }}
                                    @else
                                    <p style="color: darkred">No data available</p>
                                    @endif

                                </td>
                                <td>
                                    @if ($d->phone && $d->phone !== null)
                                    {{ $d->phone }}
                                    @else
                                    <p style="color: darkred">No data available</p>
                                    @endif

                                </td>
                                <td>
                                    @if ($d->Subject && $d->Subject !== null)
                                    {{ $d->Subject }}
                                    @else
                                    <p style="color: darkred">No data available</p>
                                    @endif

                                </td>
                                <td>
                                    @if ($d->message && $d->message !== null)
                                    {{ $d->message }}
                                    @else
                                    <p style="color: darkred">No data available</p>
                                    @endif

                                </td>
                                <td><a type="button"  data-toggle="modal" data-target="#exampleModal{{$d->id}}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ $d->name }} - Message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6 colored"><b>Name</b></div>
                                                <div class="col-md-6">@if (isset($d->name))
                                                    {{ $d->name }}
                                                    @else
                                                    <p style="color: darkred">No data available</p>
                                                @endif</div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 colored"><b>Email</b></div>
                                                <div class="col-md-6">@if (isset($d->email))
                                                    <a href="mailto:{{ $d->email }}">{{ $d->email }}</a>
                                                    @else
                                                    <p style="color: darkred">No data available</p>
                                                @endif
                                            </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 colored"><b>Phone</b></div>
                                                <div class="col-md-6">@if (isset($d->phone))
                                                    <a href="tel:{{ $d->phone }}">{{ $d->phone }}</a>
                                                    @else
                                                    <p style="color: darkred">No data available</p>
                                                @endif
                                            </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 colored"><b>Subject</b></div>
                                                <div class="col-md-6">@if (isset($d->subject))
                                                    {{ $d->subject }}
                                                    @else
                                                    <p style="color: darkred">No data available</p>
                                                @endif
                                            </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 colored"><b>Message</b></div>
                                                <div class="col-md-6">@if (isset($d->message))
                                                    {{ $d->message }}
                                                    @else
                                                    <p style="color: darkred">No data available</p>
                                                @endif
                                            </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-info" onclick="printModalContent({{ $d->id }})">Print</button>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                         </tbody>


                         <tfoot>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>View</th>

                         </tfoot>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
 </div>
 <script>
    function printModalContent(modalId) {
        // Get the content of the modal body
        const modalContent = document.querySelector(`#exampleModal${modalId} .modal-body`).innerHTML;

        // Open a new window for printing
        const printWindow = window.open('', 'width=800,height=600');
        printWindow.document.open();
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Message</title>
                <style>
                    body { font-family: Arial, sans-serif; margin: 20px; }
                    .colored { color: darkblue; font-weight: bold; }
                    hr { margin: 10px 0; }
                </style>
            </head>
            <body>
                <h3>Message Details</h3>
                ${modalContent}
                <hr>
                <p style="text-align: center;">Printed from the system</p>
            </body>
            </html>
        `);
        printWindow.document.close();
        printWindow.focus();

        // Trigger print and close the window after printing
        printWindow.print();
        printWindow.onafterprint = () => printWindow.close();
    }
</script>

@endsection
