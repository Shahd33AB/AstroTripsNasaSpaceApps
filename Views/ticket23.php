<?php
include_once 'nav.php';
?>
<div class="container" id="pdf">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card ticket-card">
                <div class="ticket-header">
                    <h2 class="ticket-title">AstroTrips Ticket</h2>
                </div>
                <div class="ticket-info">
                    <img src="img/ticket2.jpeg" alt="Planet" class="planet-image">
                    <span class="text-light">Traveller:</span>
                    <span class="ticket-info-value">Shahd Sharaf</span>
                </div>
                <hr class="ticket-line">
                <div class="ticket-info">
                    <span class="text-light">Duration:</span>
                    <span class="ticket-info-value">7 days</span>
                </div>
                <hr class="ticket-line">
                <div class="ticket-info">
                    <span class="text-light">Leaving Time:</span>
                    <span class="ticket-info-value">October 11, 2023, 10:00 AM</span>
                </div>
                <hr class="ticket-line">
                <div class="ticket-info">
                    <span class="text-light">Arriving Time:</span>
                    <span class="ticket-info-value">October 18, 2023, 2:00 PM</span>
                </div>
                <hr class="ticket-line">
                <div class="ticket-info">
                    <span class="text-light">Trip Name:</span>
                    <span class="ticket-info-value">Skating on Saturn</span>
                </div>
                <hr class="ticket-line">
                <div class="ticket-info">
                    <span class="text-light">User ID:</span>
                    <span class="ticket-info-value">153003</span>
                </div>
                <hr class="ticket-line">
                <div class="ticket-info">
                    <span class="text-light">Trip ID:</span>
                    <span class="ticket-info-value">10987</span>
                </div>
                <div class="ticket-id">
                    Ticket ID: 225533
                </div>
                <img src="img/qrcode_78880173_042c33207256eb61df7af8b6b52c48b8.png" class="qr-code">
                <div class="ticket-destination">
                    Destination: Saturn
                </div>
            </div>
        </div>
    </div>
</div>
<button class="sh" onclick="printDiv('pdf','Title')">Save Ticket</button>
<script>
    var doc = new jsPDF();

    function saveDiv(divId, title) {
    doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
    doc.save('div.pdf');
        }
    function printDiv(divId,
        title) {
    let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');
    mywindow.document.write(`<html><head><title>${title}</title>`);
    mywindow.document.write('</head><body >');
    mywindow.document.write(document.getElementById(divId).innerHTML);
    mywindow.document.write('</body></html>');
     mywindow.document.close(); // necessary for IE >= 10
     mywindow.focus(); // necessary for IE >= 10*/
    mywindow.print();
    mywindow.close();
    return true;
        }
</script>
<?php
include_once 'footer.php';
?>