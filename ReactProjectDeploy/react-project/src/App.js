import React from 'react';
import './App.css';
import Me from './components/Me';
import Skills from './components/Skills';
import Profil from './components/Profil';
import StudiesExp from './components/CursusExp';
import { FaFilePdf, FaGithub } from 'react-icons/fa';
import pdf from './components/CVJA.pdf';
import pdf2 from './components/CertificationAgile.pdf';
import pdf3 from './components/Opquast.pdf';


/*Commentaires*/

function App() {
  return (
      <div className="App">
        <div className='grid_container'>
          <div className='sidebar'>
            <div className='pdf'>
              <a href = {pdf} target = "blank"><FaFilePdf  style={{fontSize:30}}  /></a>
            </div>
            <div className='github'>
              <a href = "https://github.com/Juliette117" target = "blank"><FaGithub  style={{fontSize:30}}  /></a>
            </div>
            <Me />
            <Skills />
            <p className='fv'>Reconnaissance de la Qualité de
            Travailleur Handicapé</p>
          </div>
          <div className='main'>
            <Profil />
            <StudiesExp />
            <div className='cursus mb3'>
            <h3 className='h3'>Certifications</h3>
            <hr></hr>
            <p className='grid_date'>2021</p>
          </div>
            <ul className='liste'>
              <li><a href = {pdf2} target = "blank">Certificat Agiles</a></li> <p style={{fontSize:17}}>Méthodes Agiles de gestion et amorçage de projet</p> 
              <li><a href = {pdf3} target = "blank" style={{marginTop:20}}>Certificat Opquast</a></li> <p style={{fontSize:17}}>Maîtrise de la qualité en projet web</p>
            </ul>
          </div>
        </div>
      </div>

  );
}

export default App;
