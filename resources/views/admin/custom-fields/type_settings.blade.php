<div class="mt-3 p-3 border rounded bg-light">
    <h5 class="mb-3">{{ $fieldType->name }} Settings</h5>

    @if($fieldType->has_options)
        <div class="form-group mb-3">
            <label>Field Options <span class="text-danger">*</span></label>

            <div id="dynamic-options-container">
                <div class="input-group mb-2 option-row">
                    <input type="text" name="options[]" class="form-control" placeholder="Enter option value" required>
                    <button class="btn btn-success add-option-btn" type="button">
                        <strong>+</strong>
                    </button>
                </div>
            </div>

            <small class="text-muted">Add the choices the user will see (e.g., Red, Green, Blue).</small>
        </div>
    @endif

    <div class="row">
        @if(is_array($params) && array_key_exists('placeholder', $params))
            <div class="col-md-6 mb-3">
                <label>Placeholder</label>
                <input type="text" name="params[placeholder]" class="form-control" placeholder="e.g., Enter your name...">
            </div>
        @endif

        @if(is_array($params) && array_key_exists('default_value', $params))
            <div class="col-md-6 mb-3">
                <label>Default Value</label>
                <input type="text" name="params[default_value]" class="form-control">
            </div>
        @endif

        @if(is_array($params) && array_key_exists('min', $params))
            <div class="col-md-6 mb-3">
                <label>Min Value</label>
                <input type="text" name="params[min]" class="form-control" placeholder="Min value">
            </div>
        @endif

        @if(is_array($params) && array_key_exists('max', $params))
            <div class="col-md-6 mb-3">
                <label>Max Value</label>
                <input type="text" name="params[max]" class="form-control" placeholder="Max value">
            </div>
        @endif

        @if(is_array($params) && array_key_exists('rows', $params))
            <div class="col-md-6 mb-3">
                <label>Textarea Rows</label>
                <input type="number" name="params[rows]" class="form-control" value="3">
            </div>
        @endif
    </div>

    <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" name="is_required" value="1" id="is_required_check">
        <label class="form-check-label" for="is_required_check">
            Is this field required?
        </label>
    </div>
</div>

<script>
    $(document).ready(function() {

        // 1. Handle adding a new row
        // Added .off('click') to prevent the event from firing multiple times if loaded via AJAX
        $(document).off('click', '.add-option-btn').on('click', '.add-option-btn', function() {

            // Clone the row where the button was clicked
            var newRow = $(this).closest('.option-row').clone();

            // Clear the input value in the cloned row so it's empty
            newRow.find('input').val('');

            // Find the button in the cloned row, change its classes, and update the text to "-"
            newRow.find('button')
                .removeClass('btn-success add-option-btn')
                .addClass('btn-danger remove-option-btn')
                .html('<strong>-</strong>');

            // Append the fresh row to the container
            $('#dynamic-options-container').append(newRow);
        });

        // 2. Handle removing a row
        // Added .off('click') here as well for safety
        $(document).off('click', '.remove-option-btn').on('click', '.remove-option-btn', function() {
            // Find the closest parent with the class 'option-row' and remove it
            $(this).closest('.option-row').remove();
        });

    });
</script>
