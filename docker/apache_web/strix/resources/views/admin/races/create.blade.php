<div class="container">
  <div class="row mt-4 mb-2">
    <div class="col-md-10">
        <h1>NEW RACE</h1>
    </div>
    <div class="col-md-2 d-flex align-items-center justify-content-end">
        <a href="{{ route('race.create') }}" class="btn btn-danger">Cancel</a>
    </div>
  </div>
  <form>
    <div class="mb-3">
      <label for="race-description-input" class="form-label">Description</label>
      <input type="text" class="form-control" id="race-description-input" aria-describedby="race-description-help">
      <div id="race-description-help" class="form-text">Introduce a description for the race.</div>
    </div>
    <div class="mb-3">
      <label for="race-uneveness" class="form-label">Unevenness</label>
      <input type="number" class="form-control" id="race-uneveness" aria-describedby="race-unevenness-help">
      <div id="race-unevenness-help" class="form-text">How much unevenness does the race have?</div>
    </div>
    <div class="mb-3">
      <label for="race-map" class="form-label">Map</label>
      <input type="file" class="form-control" id="race-map" aria-describedby="race-map-help">
      <div id="race-map-help" class="form-text">Upload the race map.</div>
    </div>
    <div class="mb-3">
      <label for="race-max-competitors" class="form-label">Max competitors</label>
      <input type="number" class="form-control" id="race-max-competitors" aria-describedby="race-max-competitors-help">
      <div id="race-max-competitors-help" class="form-text">How many competitors can participate at most?</div>
    </div>
    <div class="mb-3">
      <label for="race-distance" class="form-label">Distance</label>
      <input type="number" class="form-control" id="race-distance" aria-describedby="race-distance-help">
      <div id="race-distance-help" class="form-text">How long is the race in kilometers?</div>
    </div>
    <div class="mb-3">
      <label for="race-date-input" class="form-label">Date</label>
      <input type="date" class="form-control" id="race-date-input" aria-describedby="race-date-help">
      <div id="race-date-help" class="form-text">Enter the date of the race.</div>
    </div>
    <div class="mb-3">
      <label for="race-time-input" class="form-label">Time</label>
      <input type="time" class="form-control" id="race-time-input" aria-describedby="race-time-help">
      <div id="race-time-help" class="form-text">Introduce a time for the race to start.</div>
    </div>
    <div class="mb-3">
      <label for="race-promotion-input" class="form-label">Promotion</label>
      <input type="file" class="form-control" id="race-promotion" aria-describedby="race-promotion-help">
      <div id="race-promotion-help" class="form-text">Upload the race promotion banner.</div>
    </div>
    <div class="mb-3">
      <label for="race-sponsorship-input" class="form-label">Sponsorship</label>
      <input type="text" class="form-control" id="race-sponsorship-input" aria-describedby="race-sponsorship-help">
      <div id="race-sponsorship-help" class="form-text">Select the sponsors for the race.</div>
    </div>
    <div class="mb-3">
      <label for="race-inscription-input" class="form-label">Inscription</label>
      <input type="number" class="form-control" id="race-inscription-input" aria-describedby="race-inscription-help">
      <div id="race-inscription-help" class="form-text">Set up the race inscription price.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>