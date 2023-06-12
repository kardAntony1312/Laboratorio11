@extends('layouts.app')

@section('content')
<?php $opcion = ''?>
@if (isset($sitio))
    <?php $opcion = $sitio ?>
@endif


        @if ($opcion == 'hoteles' or $opcion == '')
            @include('hotel')
        @elseif ($opcion == 'promociones')
            @include('promocion')
        @elseif ($opcion == 'editor')
            @include('crudhot.edit')
        @elseif ($opcion == 'creador')
            @include('crudhot.create')
        @elseif ($opcion == 'eliminador')
            @include('crudhot.kill')
        @endif
@endsection
