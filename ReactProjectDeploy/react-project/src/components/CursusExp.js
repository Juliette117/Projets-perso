import React from 'react';
import './CursusExp.css'
import DataFormations from '../data/Formations';
import Formations from './Formations';
import DataExperiences from '../data/Experiences';
import Experiences from './Experiences';

function CursusExp() {
  return (
    <div>
      <Formations data={DataFormations} />
      <Experiences data={DataExperiences} />
    </div>
  )
}



export default CursusExp;
