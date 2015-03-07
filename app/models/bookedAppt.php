<?php
 
class BookedAppt extends Eloquent {
 
    protected $table = 'bookedAppts';

    //one booked appointment can only have one client; one to one
    // public function client()
    // {
    //     return $this->belongsTo('client','clientId');
    // }

    // //one booked appointment can only have one availAppt
    // public function availAppt()
    // {
    //     return $this->belongsTo('availAppt','apptId');
    // }
    
    //one booked appt can only have one location
 	// public function location()
  //   {
  //       return $this->hasOne('location');
  //   }
}