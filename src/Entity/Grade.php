<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GradeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=GradeRepository::class)
 */
class Grade
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $grade;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $student;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(?string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getStudent(): ?string
    {
        return $this->student;
    }

    public function setStudent(string $student): self
    {
        $this->student = $student;

        return $this;
    }
}
