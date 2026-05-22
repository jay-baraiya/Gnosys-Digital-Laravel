@extends('admin.layouts.app')

@section('title', 'General Settings')
@section('page-title', 'General Settings')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Website Configuration</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.store') }}" method="POST">
                    @csrf
                    
                    @foreach($settings as $group => $items)
                        <h6 class="text-uppercase text-muted fw-bold mb-3 mt-4 small">{{ $group }} Settings</h6>
                        <div class="row">
                            @foreach($items as $setting)
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">{{ str_replace('_', ' ', ucfirst($setting->key)) }}</label>
                                    @if($setting->type == 'textarea' || strlen($setting->value) > 100)
                                        <textarea name="settings[{{ $setting->key }}]" class="form-control" rows="3">{{ $setting->value }}</textarea>
                                    @else
                                        <input type="text" name="settings[{{ $setting->key }}]" class="form-control" value="{{ $setting->value }}">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div class="nav-divider"></div>
                    @endforeach

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Save Settings
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
