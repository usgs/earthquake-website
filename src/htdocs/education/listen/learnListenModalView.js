'use strict';

var ModalView = require('mvc/ModalView');

function GGPM() {
  var GGPMText =
    '<p>' +
        'Yes, the Geysers area experienced many triggered earthquakes after the Landers ' +
        'event. In fact, since then seismologists have observed that activity in the ' +
        'Geysers area often picks up after large earthquakes elsewhere in California. ' +
        'One similarity between the volcanic center at Long Valley caldera and the Geysers ' +
        'area is that both have hot rocks. In fact, the Geysers area includes a geothermal ' +
        'power plant that turns the heat from these rocks into electricity. The heat ' +
        'in both areas may have something to do with why there are triggered earthquakes ' +
        'there.' +
    '</p>' +
    '<p>' +
        'The magnitude 7.3 Landers earthquake took place in the desert east of Los ' +
        'Angeles. The seismograms were recorded by the USGS\'s Northern California Seismic ' +
        'Network on instruments in Long Valley, Parkfield, and the Geysers.' +
    '</p>';

    var GGPM = document.querySelector('.GGPM'),GGPMModal;

    GGPMModal = ModalView(GGPMText, {
      'title': 'Correct!',
      'buttons': []
    });

    GGPM.addEventListener('click', GGPMModal.show.bind(GGPMModal));

}

function parkfield() {
  var parkfieldText =
    '<p>' +
        'The Parkfield area did not experience any small triggered earthquakes after ' +
        'the Landers event. The sound you heard was just the mainshock.' +
    '</p>' +
    '<p>' +
        'Try listening to them again.' +
    '</p>';

    var parkfield = document.querySelector('.parkfield'), parkfieldModal;

    parkfieldModal = ModalView(parkfieldText, {
      'title': 'Sorry',
      'buttons': [],
    });

    parkfield.addEventListener('click', parkfieldModal.show.bind(parkfieldModal));

}

function p1() {
  var p1Text =
    '<p>' +
        'The earthquake you picked had the longer fault and therefore the lower pitch.' +
    '</p>' +
    '<p>' +
        'Try listening to them again.' +
    '</p>';

    var p1 = document.querySelector('.p1'), p1Modal;

    p1Modal = ModalView(p1Text, {
      'title': 'Sorry',
      'buttons': [],
    });

    p1.addEventListener('click', p1Modal.show.bind(p1Modal));

}

function p2() {
  var p2Text =
    '<p>' +
        'Yes, the earthquake you picked had the shorter fault which gave it the higher sound.' +
    '</p>' +
    '<p>' +
        'These two earthquakes had magnitudes of 6.5 and 6.3 and took place off the ' +
        'coast of Northern California, a little bit south of Eureka. The seismograms ' +
        'were recorded by the U.C. Berkeley Seismological Laboratory at their Berkeley ' +
        'station. While both were felt in the area around Eureka only the smaller one ' +
        'with the shorter fault and more high frequency energy was widely felt 300 miles ' +
        'away in the San Francisco Bay area.'
    '</p>';

    var p2 = document.querySelector('.p2'), p2Modal;

    p2Modal = ModalView(p2Text, {
      'title': 'Correct!',
      'buttons': [],
    });

    p2.addEventListener('click', p2Modal.show.bind(p2Modal));

}

function sao() {
  var saoText =
    '<p>' +
        'The seismometer you picked was 75 miles from the earthquake, but the other seismometer ' +
        'was only 6 miles from the earthquake. The closer one should have the higher pitch.' +
    '</p>' +
    '<p>' +
        'Try listening to them again.' +
    '</p>';

    var sao = document.querySelector('.sao'), saoModal;

    saoModal = ModalView(saoText, {
      'title': 'Sorry',
      'buttons': [],
    });

    sao.addEventListener('click', saoModal.show.bind(saoModal));

}

function pkd1() {
  var pkd1Text =
    '<p>' +
        'Yes, seismometer you picked was only 6 miles from the earthquake and the other ' +
        'one was 75 miles from the earthquake. Because high frequencies don\'t travel ' +
        'well the close seismometer had a higher pitch.' +
    '</p>' +
    '<p>' +
        'After a newsworthy earthquake some people will describe it as a "sharp jolt" ' +
        'while others say it had a "rolling motion." The people who feel the "sharp jolt" ' +
        'are generally closer to the earthquake than those that felt the "rolling motion."' +
    '</p>' +
    '<p>' +
        'However, there are other factors. For instance, people near the tops of tall ' +
        'buildings will feel a "rolling motion" while those outside will feel more of ' +
        'a "sharp jolt."' +
    '</p>' +
    '<p>' +
        'This particular earthquake was a magnitude 5.1 event on the San Andreas fault ' +
        'near Parkfield, California. The two seismograms were recorded by the U.C. Berkeley ' +
        'Seismological Laboratory on their instruments in Parkfield and Hollister, California.' +
    '</p>';

    var pkd1 = document.querySelector('.pkd1'), pkd1Modal;

    pkd1Modal = ModalView(pkd1Text, {
      'title': 'Correct!',
      'buttons': [],
    });

    pkd1.addEventListener('click', pkd1Modal.show.bind(pkd1Modal));

}

function pst() {
  var pstText =
    '<p>' +
        'Yes, the seismometer you picked was on the solid rock. You could tell this ' +
        'because the seismogram sounded higher because the solid rock transmitted the ' +
        'waves, and especially the high frequency waves, more efficiently.' +
    '</p>' +
    '<p>' +
        'This earthquake was a magnitude 2 event on the San Andreas fault near Parkfield, ' +
        'California. The seismograms were recorded by the USGS\'s Northern California ' +
        'Seismic Network on two instruments in that area.' +
    '</p>';

    var pst = document.querySelector('.pst'), pstModal;

    pstModal = ModalView(pstText, {
      'title': 'Correct!',
      'buttons': [],
    });

    pst.addEventListener('click', pstModal.show.bind(pstModal));

}

function pmm() {
  var pmmText =
    '<p>' +
        'The seismometer you picked was in the fault zone. The fault zone doesn\'t transmit ' +
        'energy as well as solid rock so the one you picked had a lower pitch.' +
    '</p>' +
    '<p>' +
        'Try listening to them again.' +
    '</p>';

    var pmm = document.querySelector('.pmm'), pmmModal;

    pmmModal = ModalView(pmmText, {
      'title': 'Sorry',
      'buttons': [],
    });

    pmm.addEventListener('click', pmmModal.show.bind(pmmModal));

}
