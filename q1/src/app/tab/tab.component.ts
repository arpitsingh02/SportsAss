import { Component, OnInit } from '@angular/core';
import{ Student } from '../Student'
import tech from '../../assets/tech.json'
import {STUDENTS} from '../students';
@Component({
  selector: 'app-tab',
  templateUrl: './tab.component.html',
  styleUrls: ['./tab.component.css']
})
export class TabComponent implements OnInit {

  constructor() { console.log(tech);}
  headers=["name","roll"]
  headersproper=["Name","Roll Number"]
  students=tech;
  ngOnInit(): void {
  }

}
