import React from 'react';
import './Skills.css';
import Skill from './Skill';
import Interests from './Interests';
import {FaBootstrap, FaFigma, FaGitAlt, FaGithub, FaLaravel, FaLinux, FaReact, FaWordpress } from 'react-icons/fa';
import { DiCss3, DiHtml5, DiJsBadge, DiScrum } from "react-icons/di";
import { SiPhp } from "react-icons/si";


function Skills() {
  return (
    <div className='skills'>
        <h3 className='h3'>Compétences</h3>
          <h4>Langages</h4>
            <Skill icon={<SiPhp style={{fontSize: 30, marginRight: 7, color:'blueviolet'}}/>} title="PHP" rating="2" />
            <Skill  icon={<DiHtml5 style={{marginRight: 7, color:'goldenrod'}}/> } title="HTML" rating="4" />
            <Skill icon={<DiCss3 style={{marginRight: 7, color:'blue'}}/>} title="CSS" rating="4" />
            <Skill icon={<DiJsBadge style={{marginRight: 7, color:'gold'}}/>} title="JAVASCRIPT" rating="3" />
          <h4>Frameworks</h4>
            <Skill icon={<FaReact style={{marginRight: 7, color:'cyan'}}/>} title="REACT" rating="2" />
            <Skill icon={<FaLaravel style={{marginRight: 7, color:'red'}}/>} title="LARAVEL" rating="2" />
            <Skill icon={<FaBootstrap style={{marginRight: 7, color:'violet'}}/>} title="BOOTSTRAP" rating="3" />
          <h4>Outils informatiques</h4>
            <Skill icon={<FaLinux style={{fontSize: 24, marginRight: 7}}/>} title="LINUX" rating="2" />
            <Skill icon={<FaGitAlt style={{fontSize: 24, marginRight: 7, color:'firebrick'}}/>} title="GIT" rating="3" />
            <Skill icon={<FaGithub style={{marginRight: 7}}/>} title="GITHUB" rating="3" />
            <Skill icon={<FaFigma style={{marginRight: 7, color:'aquamarine'}}/>} title="FIGMA" rating="4" />
            <Skill icon={<FaWordpress style={{marginRight: 7, color:'midnightblue'}}/>} title="WORDPRESS" rating="4" />
          <h4>Méthodes de gestion de projet</h4>
            <Skill icon={<DiScrum style={{fontSize: 35, marginRight: 7, color:'chartreuse'}}/>} title="AGILE" rating="4" />
            
  
        <h3 className='h3'>Langues</h3>
        <Skill title="Anglais" rating="2" />
        <Skill title="Japonais" rating="1" />
        
        <Interests />
    </div>
 
  )
}

export default Skills;

