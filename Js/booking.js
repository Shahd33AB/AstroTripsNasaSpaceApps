var scrollPosition = 0;

  function openBookingForm() {
    // Store the current scroll position
    scrollPosition = window.scrollY;
    $('#bookingModal').modal('show');
  }

  function addPassengerFields(numPassengers) {
    $('#passengerDetails').empty();

    for (var i = 1; i <= numPassengers; i++) {
      // Create input fields for names and ages dynamically
      $('#passengerDetails').append(`
        <div class="form-group">
          <label for="passengerName${i}">Passenger ${i} Name</label>
          <input type="text" class="form-control" id="passengerName${i}" placeholder="Enter passenger ${i} name" required>
        </div>
        <div class="form-group">
          <label for="passengerAge${i}">Passenger ${i} Age</label>
          <input type="number" class="form-control" id="passengerAge${i}" placeholder="Enter passenger ${i} age" min="1" required>
        </div>
      `);
    }
    // Show the names and ages section
    $('#namesAndAgesSection').show();
  }

  function submitBooking() {
    // Get the number of tickets entered by the user
    var numTickets = parseInt($('#numTickets').val());
  
    if (numTickets == 1) {
      $('#bookingModal').modal('hide');
      // Ask the user if they want to view the ticket
      var viewTicket = confirm('Do you want to view your ticket?');
      if (viewTicket) {
        window.location.href = 'ticket1.php';
      }
    } else {
      addPassengerFields(numTickets);
  
      if ($('#confirmationCheckbox').prop('checked')) {
        $('#bookingModal').modal('hide');
        // Ask the user if they want to view the ticket
        var viewTicket = confirm('Do you want to view your ticket?');
        if (viewTicket) {
          window.location.href = 'ticket1.php';
        }
      } else {
        alert('Please confirm your information by checking the checkbox.');
      }
    }
  }
  

  $('#bookingModal').on('hidden.bs.modal', function () {
    // Restore the scroll position
    window.scrollTo(0, scrollPosition);
  });