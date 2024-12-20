function addEducation() {
  const eduSection = document.getElementById('education-section');
  const newEdu = document.createElement('div');
  newEdu.classList.add('education-entry');
  newEdu.innerHTML = `
      <input type="text" name="degree[]" placeholder="Course">
      <input type="text" name="institution[]" placeholder="Institution">
      <input type="text" name="edu_date[]" placeholder="Completion Date">
      <input type="text" name="marks[]" placeholder="Marks/Percentage">
  `;
  eduSection.appendChild(newEdu);
}


function addExperience() {
  const expSection = document.getElementById('experience-section');
  const newExp = document.createElement('div');
  newExp.classList.add('experience-entry');
  newExp.innerHTML = `
      <input type="text" name="job_title[]" placeholder="Job Title">
      <input type="text" name="company[]" placeholder="Company">
      <input type="text" name="work_date[]" placeholder="Dates">
  `;
  expSection.appendChild(newExp);
}
