<hr>
<div class="device-tabs">
    <div class="meta-info">
        <p id="seo_meta_title" class="meta-title"></p>
        <p id="seo_meta_url" class="meta-url"></p>
        <p id="seo_meta_description" class="meta-description"></p>
    </div>

    <a id="seo_google_desktop" name="seo_google_desktop" href="#" data-device="desktop" class="tab-switcher btn-seo-google-switch" role="button"><i id="seo_google_desktop" class="fa fa-desktop"></i></a>
    <a id="seo_google_mobile" name="seo_google_mobile" href="#" data-device="mobile" class="tab-switcher btn-seo-google-switch" role="button"><i id="seo_google_mobile" class="fa fa-mobile fa-lg"></i></a>
</div>
<hr>
<div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
    <label for="meta_description">Meta Description</label>
    <textarea id="meta_description" name="meta_description" placeholder="Meta Description" class="form-control" maxlength="156">{{ old('meta_description') ?? $record->seo->meta_description ?? null }}</textarea>
    <div class="text-red">
        {{ join($errors->get('meta_description'), '<br />') }}
    </div>
</div>