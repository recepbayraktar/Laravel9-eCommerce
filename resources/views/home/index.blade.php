@extends('layouts.home')

@php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp

@section('javascript')
<style type="text/css">

    .megasubmenu{ padding:1rem; }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .megasubmenu{
            left:100%; top:0; min-height: 100%; min-width:500px;
        }

        .dropdown-menu > li:hover .megasubmenu{
            display: block;
        }
    }
    /* ============ desktop view .end// ============ */

    </style>

    <script type="text/javascript">
        window.addEventListener("resize", function() {
            "use strict"; window.location.reload();
        });


        document.addEventListener("DOMContentLoaded", function(){

            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element){
                element.addEventListener('click', function (e) {
                  e.stopPropagation();
                });
            });

            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                    everydropdown.addEventListener('hidden.bs.dropdown', function () {
                        // after dropdown is hidden, then find all submenus
                          this.querySelectorAll('.megasubmenu').forEach(function(everysubmenu){
                              // hide every submenu as well
                              everysubmenu.style.display = 'none';
                          });
                    })
                });

                document.querySelectorAll('.has-megasubmenu a').forEach(function(element){
                    element.addEventListener('click', function (e) {

                          let nextEl = this.nextElementSibling;
                          if(nextEl && nextEl.classList.contains('megasubmenu')) {
                              // prevent opening link if link needs to open dropdown
                              e.preventDefault();

                              if(nextEl.style.display == 'block'){
                                  nextEl.style.display = 'none';
                              } else {
                                  nextEl.style.display = 'block';
                              }

                          }
                    });
                })
            }
            // end if innerWidth
        });
        // DOMContentLoaded  end
    </script>

@endsection

@section('keywords')
    {{ $setting->keywords }}
@endsection

@section('description')
    {{ $setting->description }}
@endsection

@section('company')
    {{ $setting->description }}
@endsection

@section('home._header')
    @include('home._header')
@endsection

@section('content')
    @include('home._content')
@endsection
