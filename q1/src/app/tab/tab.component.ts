import { Component, OnInit } from '@angular/core';
import{ Student } from '../Student'
import tech from '../../assets/tech.json'
import{StudService} from '../stud.service';
@Component({
  selector: 'app-tab',
  templateUrl: './tab.component.html',
  styleUrls: ['./tab.component.css']
})
export class TabComponent implements OnInit {
students:Student[];
  constructor(private studService:StudService) { console.log(tech);}
  headers=["name","roll"];
  headersproper=["Name","Roll Number"];
getStudents(): void{this.studService.getStudents().subscribe(students=>this.students=students);}

   ngOnInit(): void {this.getStudents();} 


}
