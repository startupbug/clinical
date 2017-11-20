@extends('layouts.app')
@section('content')
    @include('layouts.guest.header-guest')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="search_result_deatils">
                        <h1>Search Results</h1>
                        <p>You searched for <a hrer="#"> Phase 0,</a> Neque porro quisquam est qui dolorem ipsum quia
                            dolor sit amet</p>
                        <div class="clearfix"></div>
                        <table id="example" class="display ui celled table" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Recruiment Status</th>
                                <th>Prospective Registration</th>
                                <th>Main ID</th>
                                <th>Public Title</th>
                                <th>Date of Registration</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th colspan="6">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <?php for($a = 1; $a <= 10; $a++){?>
                                            <li class="page-item"><a class="page-link" href="#"><?php echo $a;?></a>
                                            </li>
                                            <?php }?>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php for($a = 1; $a <= 10; $a++){?>
                            <tr>
                                <td>Not
                                    Recruiting
                                </td>
                                <td>Yes</td>
                                <td>jdc-ABC-000-311017</td>
                                <td>Etiusto dignissimos ducimus blanditiis praesentium</td>
                                <td>2017-10-31</td>
                            </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
