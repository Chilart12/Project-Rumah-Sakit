<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Patient;

class PatientController extends Controller
{
    
    public function index() {
        $patient = Patient::all();
  
        return view ('pages.patients.index', compact('patient'));
      }
  
      public function create() {
        return view('pages.patients.create', compact('patient'));
      }
  
      public function store() {
        $this->validate(request(), [
              'id' => 'required',
              'name' => 'required',
              'age' => 'required|min:1',
              'gender' => 'required|min:1',
              'address' => 'required|min:1',
        ]);
  
        Patient::create([
            'id' => request('id'),
            'name' => request('name'),
            'age' => request('age'),
            'gender' => request('gender'),
            'address' => request('address'),
        ]);
  
          return redirect()->route('pages.patients.index')->withInfo('Data Pasien Ditambahkan');
      }
  
      public function show(Patient $patient) {
        return view('pages.patients.show', compact('patient'));
      }
  
      public function edit(Patient $patient) {

          return view('pages.patients.edit', compact('patient'));
      }
  
      public function update(Patient $patient) {
  
          $patient->update([
            'id' => request('id'),
            'name' => request('name'),
            'age' => request('age'),
            'gender' => request('gender'),
            'address' => request('address'),
          ]);
  
          return redirect()->route('pages.patients.index')->withInfo('Data Pasien berhasil dirubah');
      }
  
      public function destroy(Patient $patient) {
  
          $patient->delete();
  
          return redirect()->route('pages.patients.index')->withDanger('Data Pasien Berhasil Dihapus');;
      }

}
