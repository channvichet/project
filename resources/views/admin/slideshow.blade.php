@extends('layouts.master')

@section('title',$title)

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
                <li><a href="${pageContext.request.contextPath}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            </ol>
        </section>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Create Date</th>
            </tr>
            <tr>
                @foreach($slideshow as $slide)
                    <td>{{$slide->SLSID}}</td>
                    <td>{{$slide->SLSName}}</td>
                    <td><img src="{{$slide->SLSImage}}"></td>
                    <td>{{$slide->CDate}}</td>
                @endforeach
            </tr>
        </table>
    </div>
@endsection