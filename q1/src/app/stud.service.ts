import { Injectable } from '@angular/core';
import {Student} from './Student';
import{STUDENTS} from './students';
import{Observable, of} from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
@Injectable({
  providedIn: 'root',
})
export class StudService {
	private studentsUrl = 'https://myladder.app/api/assignment/tech';
  constructor( private http: HttpClient) { }
getStudents(): Observable<Student[]>{return this.http.get<Student[]>(this.studentsUrl);}
}
